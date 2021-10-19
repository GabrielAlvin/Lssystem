
$("#btn").click(function() {
  $('.sidebar').toggleClass("open");
  $('#btn').toggleClass("fa-align-justify fa-align-right");
});

$(".content-page").click(function() {
  $('.sidebar').removeClass("open");
  $('#btn').removeClass("fa-align-right");
  $('#btn').addClass("fa-align-justify");
});

const labels = [
  'JAN',
  'FEV',
  'MAR',
  'ABR',
  'MAI',
  'JUN',
];

const data = {
  labels: labels,
  datasets: [{
    label: 'Meus ganhos',
    backgroundColor: '#ad9536',
    borderColor: '#243147',
    data: [0, 10, 5, 2, 2, 3, 5],
  }]
};

const config = {
  type: 'line',
  data: data,
  options: {}
};

var myChart = new Chart(
  document.getElementById('myChart'),
  config
);

$('#icon_password1').click(function(e) {
  e.preventDefault();
  if ( $('#senhaatual').attr('type') == 'password' ) {
    $('#senhaatual').attr('type', 'text');
    $('#icon_password1').attr('class', 'fa fa-eye');
  } else {
      $('#senhaatual').attr('type', 'password');
      $('#icon_password1').attr('class', 'fa fa-eye-slash');
  }
});

$('#icon_password2').click(function(e) {
  e.preventDefault();
  if ( $('#senhanova').attr('type') == 'password' ) {
    $('#senhanova').attr('type', 'text');
    $('#icon_password2').attr('class', 'fa fa-eye');
  } else {
      $('#senhanova').attr('type', 'password');
      $('#icon_password2').attr('class', 'fa fa-eye-slash');
  }
});