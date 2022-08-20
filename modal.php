<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="./assets/CSS/modal.css" />
	</head>
	<body>
    
		<button class="modal-btn success-modal js-open btn-open is-active">Success modal</button>
		<button class="modal-btn error-modal js-open btn-open is-active">Error modal</button>
		<script src="https://unpkg.com/dynamics.js@1.1.5"></script>
		<script src="./assets/JS/modal.js"></script>
	</body>
</html>

<!-- <script>
let timerInterval

Swal.fire({
  title: 'Auto close alert!',
  html:
    'I will close in <strong></strong> seconds.<br/><br/>' +
    '<button id="increase" class="btn btn-warning">' +
      'I need 5 more seconds!' +
    '</button><br/><br/>' +
    '<button id="stop" class="btn btn-danger">' +
      'Please stop the timer!!' +
    '</button><br/><br/>' +
    '<button id="resume" class="btn btn-success" disabled>' +
      'Phew... you can restart now!' +
    '</button><br/><br/>' +
    '<button id="toggle" class="btn btn-primary">' +
      'Toggle' +
    '</button>',
  timer: 10000,
  didOpen: () => {
    const content = Swal.getHtmlContainer()
    const $ = content.querySelector.bind(content)

    const stop = $('#stop')
    const resume = $('#resume')
    const toggle = $('#toggle')
    const increase = $('#increase')

    Swal.showLoading()

    function toggleButtons () {
      stop.disabled = !Swal.isTimerRunning()
      resume.disabled = Swal.isTimerRunning()
    }

    stop.addEventListener('click', () => {
      Swal.stopTimer()
      toggleButtons()
    })

    resume.addEventListener('click', () => {
      Swal.resumeTimer()
      toggleButtons()
    })

    toggle.addEventListener('click', () => {
      Swal.toggleTimer()
      toggleButtons()
    })

    increase.addEventListener('click', () => {
      Swal.increaseTimer(5000)
    })

    timerInterval = setInterval(() => {
      Swal.getHtmlContainer().querySelector('strong')
        .textContent = (Swal.getTimerLeft() / 1000)
          .toFixed(0)
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
})
</script> -->