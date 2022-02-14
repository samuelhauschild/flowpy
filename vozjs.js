const buttonInsert = document.querySelector('.btn-toggle')
const divTextBox = document.querySelector('.text-box')
const buttonReadText = document.querySelector('#read')
const closeDivTextBox = document.querySelector('.close')
const selectElement = document.querySelector('select')
const textArea = document.querySelector('textarea')


const setVoice = event =>{
    
}

const uterrance = new SpeechSynthesisUtterance()

const setTextMessage = text =>{
    uterrance.text = text
}
const spreakText = () =>{
    speechSynthesis.speak(uterrance)
}
let voices = []


speechSynthesis.addEventListener('voiceschanged' , () =>{
    voices = speechSynthesis.getVoices()
    
    voices.forEach(({name , lang}) =>{

        const option = document.createElement('option')

        option.value = name
        option.textContent = `${lang} | ${name}`
        selectElement.appendChild(option)
    })
})

buttonInsert.addEventListener('click', () =>
{
    divTextBox.classList.add('show')
})

closeDivTextBox.addEventListener('click', ()=>
{
    divTextBox.classList.remove('show')
})

selectElement.addEventListener('change' , setVoice)

buttonReadText.addEventListener('click', ()=>{
    setTextMessage(textArea.value)
    spreakText()
    
})