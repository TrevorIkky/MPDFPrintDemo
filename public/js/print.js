document.getElementById('print').addEventListener('click', () => {
     document.getElementById('print').style.display = "none"
     document.getElementById('print-form').submit()
})

// window.addEventListener("afterprint", () => {
//     document.getElementById('print-me').style.display = "flex"
//     document.title = 'Exam Attendance Register'
// })