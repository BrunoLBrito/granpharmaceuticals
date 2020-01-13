'use strict'

let btn = document.querySelector('.btn-menu')
let form = document.querySelector('.form-contact')
let flex = document.querySelector('.flex')
let nav = document.querySelector('.nav')
let itemOral = document.querySelector('#oral')
let itemInjetado = document.querySelector('#injetado')
let debug = document.querySelector('.debug')
let show = document.querySelector('.show')
let btnSubmit = document.querySelector('.btnSubmit')

// Get the modal
let modal = document.getElementById('myModal')

// http://192.168.25.11:3000/index.php?product=1&isValidated=true
let query = location.search.slice(1)
let parts = query.split('&')
let data = {}

parts.forEach(function(parte) {
	var chaveValor = parte.split('=')
	var chave = chaveValor[0]
	var valor = chaveValor[1]
	data[chave] = valor
})

window.onload = () => {
	if (data.isValidated) {
		modal.style.display = 'block'
		fetch('product.json')
			.then(response => response.json())
			.then(result => {
				let modalBox = `
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                        <h2>${result.product[data.product].title}</h2>
                        <p>${result.product[data.product].amount}</p>
                    </div>
                    <div class="modal-body">
                        <p>${result.product[data.product].description}</p>
                    </div>
                    <div class="modal-footer">
                        <h3>Parabéns acaba de adquirir um produto original <strong>Gran Pharmaceuticals</strong>.</h3>
                    </div>
                </div>
            `
				modal.innerHTML = modalBox

				let span = document.getElementsByClassName('close')[0]
				// When the user clicks on <span> (x), close the modal
				span.onclick = () => {
					modal.style.display = 'none'
				}
				$readMoreJS.init({
					target: '.modal p', // Selector of the element the plugin applies to (any CSS selector, eg: '#', '.'). Default: ''
					numOfWords: 50, // Number of words to initially display (any number). Default: 50
					toggle: true, // If true, user can toggle between 'read more' and 'read less'. Default: true
					moreLink: 'ler mais...', // The text of 'Read more' link. Default: 'read more ...'
					lessLink: 'ler menos' // The text of 'Read less' link. Default: 'read less'
				})
			})
			.then(err => console.log(err))
	}
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = 'none'
	}
}

let active = true
btn.onclick = () => {
	if (active) {
		nav.style.left = 0
		active = false
	} else {
		nav.style.left = '-100%'
		active = true
	}
}

form.onsubmit = e => {
	e.preventDefault()
	btnSubmit.disabled = true

	let data = new FormData(form)
	let options = {
		method: 'POST',
		body: data
	}

	fetch('https://emailgf.herokuapp.com/send.php', options)
		.then(response => response.json())
		.then(result => {
			if (result.indexOf('Opss') > -1) {
				Swal.fire({
					title: result,
					animation: true,
					type: 'error'
				})
			} else {
				Swal.fire({
					title: result,
					animation: true,
					type: 'success'
				})
			}
			form.reset()
			btnSubmit.disabled = false
		})
		.catch(err => console.log(err))
}

// Produtos

function compare(a, b) {
	if (a.title < b.title) return -1
	if (a.title > b.title) return 1
	return 0
}

fetch('product.json')
	.then(response => response.json())
	.then(result => {
		let box = ''
		result.product.sort(compare).forEach(value => {
			box += `
                <article class="box ${value.category}">
                    <div class="box-header">
                        <h3>${value.title}</h3>
                        <p>${value.amount}</p>
                    </div>
                    <div class="box-body">
                        <p>${value.description}</p>
                    </div>
                </article> 
            `
		})

		itemOral.onclick = () => {
			document.querySelectorAll('.injetado').forEach(value => {
				value.style.display = 'none'
			})
			document.querySelectorAll('.oral').forEach(value => {
				value.style.display = 'block'
			})
		}
		itemInjetado.onclick = () => {
			document.querySelectorAll('.oral').forEach(value => {
				value.style.display = 'none'
			})
			document.querySelectorAll('.injetado').forEach(value => {
				value.style.display = 'block'
			})
		}
		flex.innerHTML = box

		$readMoreJS.init({
			target: '.product p', // Selector of the element the plugin applies to (any CSS selector, eg: '#', '.'). Default: ''
			numOfWords: 50, // Number of words to initially display (any number). Default: 50
			toggle: true, // If true, user can toggle between 'read more' and 'read less'. Default: true
			moreLink: 'ler mais...', // The text of 'Read more' link. Default: 'read more ...'
			lessLink: 'ler menos' // The text of 'Read less' link. Default: 'read less'
		})
	})
	.catch(err => console.log(err))
