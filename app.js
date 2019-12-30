$(document).ready(()=>{
    
    $('#btnSpeak').click(()=>{
        // document.querySelector('body').removeChild(document.querySelector('.newAudio'))
        console.log('zzz');
        text=$('#text').val()
        $.get('index.php?text=' + text,(data)=>{
            console.log(data)
            // console.log(data.data)
            
            newAudio = document.createElement('audio')
            newAudio.innerHTML = '<source src="audio' + data+'.mp3" type="audio/mpeg"></source>'
            newAudio.className = 'newAudio'
            document.querySelector('body').appendChild(newAudio)
            
            // document.querySelector('.newAudio').play();
            document.querySelectorAll('.newAudio')[document.querySelectorAll('.newAudio').length-1].play();
            // document.querySelector('body').removeChild(document.querySelector('.newAudio'))
        })
    })

})
