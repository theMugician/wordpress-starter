const toggleModals = document.querySelectorAll('.js-toggle-modal')

toggleModals.forEach(toggle => { 
  toggle.addEventListener('click', function () {
  	let targetModalId = this.getAttribute('href')
  	targetModalId = targetModalId.slice(1,targetModalId.length)
    let targetModal = document.getElementById(targetModalId)
    console.log('Toggle click')
    
    targetModal.classList.toggle('active')
  }, false)
})

const navItemDropdowns = document.querySelectorAll('.js-nav-item-dropdown')

navItemDropdowns.forEach(navItemDropdown => {
  navItemDropdown.addEventListener('click', function () {
    const dropdownMenu = navItemDropdown.querySelector('.dropdown__menu')
  	// let targetModalId = this.getAttribute('href')
  	// targetModalId = targetModalId.slice(1,targetModalId.length)
    // let targetModal = document.getElementById(targetModalId)
    
    dropdownMenu.classList.toggle('is-active')
  }, false)
})