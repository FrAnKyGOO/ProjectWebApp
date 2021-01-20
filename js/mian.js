// MENU SHOW
const showMenu = (toggLeId,navId) =>{
    const toggle = document.getElementById(toggLeId), 
        nav = document.getElementById(navId)
    
    if(toggle && nav){
        toggle.addEventListener('click' ,()=>{
            nav.classList.toggle('show')
        })
    }
}

showMenu('nav_toggle','nav-menu')

// REMOVE MENU
const navlink = document.querySelectorAll('.nav__link')

function linkAction(){
    // Action link
    navlink.forEach(n => n.classList.remove('active'))
    this.classList.add('active')

    //REMOVE MENU MOBILE
    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show')
}

navlink.forEach(n => n.addEventListener('click', linkAction))

// Accound
document.querySelector('.img-btn').addEventListener('click', function()
	{
		document.querySelector('.cont').classList.toggle('s-signup')
	}
);
