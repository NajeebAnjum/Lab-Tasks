function readMore() {
    let showContent = document.getElementById('show');
    if(showContent.style.display == 'none')
    {
        showContent.style.display = 'block';
    }
    else{
        showContent.style.display = 'none';
    }
}

function showHide() {
    let Content = document.getElementById('hide');
    if(Content.style.display != 'none')
    {
        Content.style.display = 'none';
    }
    else{
        Content.style.display = 'block';
    }
}

function showHealth() {
    let healthContent = document.getElementById('health');
    if(healthContent.style.display != 'none')
    {
        healthContent.style.display = 'none';
    }
    else{
        healthContent.style.display = 'block';
    }
}

function showGlobal() {
    let healthContent = document.getElementById('global');
    if(healthContent.style.display != 'none')
    {
        healthContent.style.display = 'none';
    }
    else{
        healthContent.style.display = 'block';
    }
}

function showCare() {
    let healthContent = document.getElementById('care');
    if(healthContent.style.display != 'none')
    {
        healthContent.style.display = 'none';
    }
    else{
        healthContent.style.display = 'block';
    }
}