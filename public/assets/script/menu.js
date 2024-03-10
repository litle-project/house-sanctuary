function toggle (selector, parent) {
    const children = document.getElementById(selector)
    const arrow = document.getElementById(`arrow-${selector}`)
    const fontAwesome = document.getElementsByClassName('fas')

    Array.prototype.forEach.call(fontAwesome, (fa) => {
        fa.classList.remove('fa-chevron-down')
        fa.classList.add('fa-chevron-up')
    });

    if (children.className.includes('hidden')) {
        children.classList.remove('hidden')
        arrow.classList.add('fa-chevron-down')
        arrow.classList.remove('fa-chevron-up')
    } else {
        children.classList.add('hidden')
        arrow.classList.remove('fa-chevron-down')
        arrow.classList.add('fa-chevron-up')
    } 
}

(function() {
    const path = window.location.pathname
    const menuParent = document.getElementsByClassName('menu-parent')
    const splitOut = path.split('/dashboard/').pop()

    Array.prototype.forEach.call(menuParent, (el) => {
        if (el.id && splitOut.includes(el.id)) {
            el.classList.add('bg-gray-100')
        }
    });
 })();