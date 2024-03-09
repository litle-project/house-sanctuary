function toggle (selector, parent) {
    const children = document.getElementById(selector)
    const arrow = document.getElementById(`arrow-${selector}`)
    const allChild = document.getElementsByClassName('children')
    const fontAwesome = document.getElementsByClassName('fas')
    const menuParent = document.getElementsByClassName('menu-parent')
    
    Array.prototype.forEach.call(allChild, (el) => {
        el.classList.add('hidden')
    });

    Array.prototype.forEach.call(fontAwesome, (fa) => {
        fa.classList.remove('fa-chevron-down')
        fa.classList.add('fa-chevron-up')
    });

    Array.prototype.forEach.call(menuParent, (parent) => {
        parent.classList.remove('bg-gray-100')
    });

    if (children.className.includes('hidden')) {
        children.classList.remove('hidden')
        arrow.classList.add('fa-chevron-down')
        arrow.classList.remove('fa-chevron-up')
        parent.classList.add('bg-gray-100')
    } else {
        children.classList.add('hidden')
        arrow.classList.remove('fa-chevron-down')
        arrow.classList.add('fa-chevron-up')
    } 
}