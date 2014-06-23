###
 * flatLand! - hire me !
 *
 * COFFEE/JS Document - /js/script.coffee
 * coded by leny@flatLand!
 * started at 28/04/13
###

if( window.isIE is true )
    return

bIsMobile = !!navigator.userAgent.match /Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i
bIsRetina = window.devicePixelRatio > 1
rImageSRC = /^(.*)\.(jpg|jpeg|png|gif)$/i

hideToolbar = ->
    window.scrollTo 0, 1

window.addEventListener 'load', ->
    if bIsMobile
        setTimeout hideToolbar, 0
    else
        oPhoneLink = document.getElementById( 'phone' )
        oPhoneLink.removeAttribute 'href'
    for oLink in document.querySelectorAll 'a[rel="external"]'
        oLink.setAttribute 'target', '_new'
    if bIsRetina
        for oImage in document.querySelectorAll 'img'
            oImage.src = oImage.src.replace rImageSRC, '$1_@2X.$2'
