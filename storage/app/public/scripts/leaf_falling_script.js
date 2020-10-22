let isWindowActive = true;
let leafFallingTimeOut;
let root = document.documentElement;
let createLeafIntervalTime = 5000;//5s

if(isWindowActive){
    runningLeafFallingAnimation();
}

function runningLeafFallingAnimation(){
    let fallingArea = document.getElementById('leaf_falling_area');
    root.style.setProperty("--fallingPosition", fallingArea.clientHeight+'px');
    let leafId = 0;
    let minFallingSpeed = getMinFallingSpeed(fallingArea);
    leafFallingTimeOut = setInterval(function () {
        let animationDuration = Math.floor(Math.random() * minFallingSpeed+10) + minFallingSpeed;//between minFallingSpeed and (minFallingSpeed+10 seconds)
        //let animationDuration = Math.floor(Math.random()* 10)+2;
        let leaf = document.createElement('img');
        leaf.src = 'https://res.cloudinary.com/vichhai/image/upload/v1574395010/Sienghong/leaf6-compressor_iajjff.png';
        leaf.classList.add('d_leaf');
        leaf.setAttribute("id", "d_leaf"+leafId);
        leaf.style.left = Math.floor(Math.random() * 95) + 5+"%";
        leaf.style.top = -leaf.clientHeight+'px';
        leaf.style.animationName = 'leafFallingAnim';
        leaf.style.animationDuration = animationDuration+'s';
        uniqueLeafAnimation(leaf, 3000);
        fallingArea.appendChild(leaf);
        leaf.addEventListener('animationend', function (e) {
            let leafToRemove = document.getElementById(e.target.id);
            fallingArea.removeChild(leafToRemove);
        });
        leafId++;
        //firstLoadLeaf++;//create alot of leaf at first load and than reduce time to create leaf (to avoid too much leaf created)
    }, createLeafIntervalTime);//create new leaf every 1s
}
document.onvisibilitychange = function(e) {
    if(e.target.visibilityState === 'visible'){
        isWindowActive = true;
        runningLeafFallingAnimation();
    }
    else{
        isWindowActive = false;
        clearInterval(leafFallingTimeOut);
    }
};


function uniqueLeafAnimation(leafObject, duration){
    let box = leafObject;
    setInterval(function(){
        let randomDegreeX = Math.floor(Math.random() * 360);
        let randomDegreeY = Math.floor(Math.random() * 360);
        let randomDegreeZ = Math.floor(Math.random() * 360);
        box.style.transform = "rotateX("+randomDegreeX+"deg) rotateZ("+randomDegreeY+"deg) rotateY("+randomDegreeZ+"deg)";
    }, duration);
}

function getMinFallingSpeed(fallingArea){
    let speedCompareToPageHeigh = ((100/fallingArea.clientHeight)*20).toString().split(".")[1];
    let subOnlyTwoDigit = speedCompareToPageHeigh.substr(0, 2);
    return parseInt(subOnlyTwoDigit);
}
