// const toggleModals = document.querySelectorAll('.js-toggle-modal')

// toggleModals.forEach(toggle => { 
//   toggle.addEventListener('click', function () {
//   	let targetModalId = this.getAttribute('href')
//   	targetModalId = targetModalId.slice(1,targetModalId.length)
//     let targetModal = document.getElementById(targetModalId)
    
//     targetModal.classList.toggle('active')
//   }, false)
// })

// const navItemDropdowns = document.querySelectorAll('.js-nav-item-dropdown')

// navItemDropdowns.forEach(navItemDropdown => {
//   navItemDropdown.addEventListener('click', function () {
//     const dropdownMenu = navItemDropdown.querySelector('.dropdown__menu')
//     const dropdownToggle = navItemDropdown.querySelector('.dropdown__toggle')

//     dropdownMenu.classList.toggle('is-active')
//     if (dropdownMenu.classList.contains('is-active')) {
//       dropdownToggle.ariaExpanded = 'true'
//     } else {
//       dropdownToggle.ariaExpanded = 'false'
//     }
//   }, false)
// })

window.addEventListener('load', (event) => {

  const toggleModals = document.querySelectorAll('.js-toggle-modal')
  console.log(toggleModals)
  toggleModals.forEach(toggle => { 
    toggle.addEventListener('click', function () {
      
      let targetModalId = this.getAttribute('href')
      targetModalId = targetModalId.slice(1,targetModalId.length)
      console.log(targetModalId)
      let targetModal = document.getElementById(targetModalId)
      
      targetModal.classList.toggle('active')
    }, false)
  })

  const navItemDropdowns = document.querySelectorAll('.js-nav-item-dropdown')

  navItemDropdowns.forEach(navItemDropdown => {
    navItemDropdown.addEventListener('click', function () {
      const dropdownMenu = navItemDropdown.querySelector('.dropdown__menu')
      const dropdownToggle = navItemDropdown.querySelector('.dropdown__toggle')

      dropdownMenu.classList.toggle('is-active')
      if (dropdownMenu.classList.contains('is-active')) {
        dropdownToggle.ariaExpanded = 'true'
      } else {
        dropdownToggle.ariaExpanded = 'false'
      }
    }, false)
  })


})