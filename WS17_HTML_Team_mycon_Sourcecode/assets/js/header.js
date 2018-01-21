/*this function changes the value of the background-color for the selected element
* to rgb(22,148,255)*/
function brighten(id){
    var element = document.getElementById(id);
    element.style.backgroundColor = "rgb(22,148,255)";
}

/*this function changes the value of the background-color for the selected element
* to black*/
function dim(id){
    var element = document.getElementById(id);
    if(!(element.classList.contains('selected')))
        element.style.backgroundColor = "black";
}

function togglePanel(Button, Panel, height){
    var button = document.getElementById(Button);
    var panel = document.getElementById(Panel);
    var selectedButtons = document.getElementsByClassName('selected');
    var toggledPanels = document.getElementsByClassName('toggled');
    var unselectButton = null;
    var done = false;

    if(selectedButtons.length > 0){
        var untogglePanel = toggledPanels[0];
        unselectButton = selectedButtons[0];
        done = true;
        unselectButton.style.backgroundColor = "black";
        unselectButton.classList.remove('selected');
        untogglePanel.style.height = "0px";
        untogglePanel.style.zIndex = "1";
        untogglePanel.classList.remove('toggled');
    }

    if(!done || unselectButton != button){
        button.style.backgroundColor = "rgb(22,148,255)";
        button.classList.add('selected');
        panel.style.height = height;
        panel.style.zIndex = "10";
        panel.classList.add('toggled');
    }
}