document.addEventListener('keydown', function(e){ 
    if(e.keyCode == 123) {
        e.preventDefault();
        return false;
    }
    if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
        e.preventDefault();
        return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
        e.preventDefault();
        return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
        e.preventDefault();
        return false;
    }
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
        e.preventDefault();
        return false;
    }
    if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){
        e.preventDefault();
        return false;
    }
    if(e.ctrlKey && e.keyCode == 'H'.charCodeAt(0)){
        e.preventDefault();
        return false;
    }
    if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)){
        e.preventDefault();
        return false;
    }
    if(e.ctrlKey && e.keyCode == 'F'.charCodeAt(0)){
        e.preventDefault();
        return false;
    }
    if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
        e.preventDefault();
        return false;
    }
});
document.addEventListener('contextmenu', function(e){ 
    e.preventDefault(); 
});
