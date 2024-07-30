let step = document.getElementsByClassName('step');
let prevBtn = document.getElementById('prev-btn');
let nextBtn = document.getElementById('next-btn');
let submitBtn = document.getElementById('submit-btn');

let current_step = 0;
let stepCount = 2;


step[current_step].classList.add('d-block');
step[current_step].classList.remove('d-none');

if (current_step == 0) {
    prevBtn.classList.add('d-none');
    submitBtn.classList.add('d-none');
    nextBtn.classList.add('d-block');
}

const progress = (value) => {
document.getElementsByClassName('progress-bar')[0].style.width = `${value}%`;
}


nextBtn.addEventListener('click', () => {
  current_step++;
  let previous_step = current_step - 1;
if ((current_step > 0) && (current_step <= stepCount)) {
  prevBtn.classList.remove('d-none');
  prevBtn.classList.add('d-block');

  step[current_step].classList.add('d-block');
  step[current_step].classList.remove('d-none');
  step[previous_step].classList.remove('d-block');
  step[previous_step].classList.add('d-none');
  if (current_step == stepCount) {
    submitBtn.classList.add('d-block');
    submitBtn.classList.remove('d-none');
    nextBtn.classList.remove('d-block');
    nextBtn.classList.add('d-none');
  }
}
progress((100 / stepCount) * current_step);
});

prevBtn.addEventListener('click', () => {
 if (current_step > 0) {
  current_step--;
  let previous_step = current_step + 1;

  step[current_step].classList.remove('d-none');
  step[current_step].classList.add('d-block');
  step[previous_step].classList.remove('d-block');
  step[previous_step].classList.add('d-none');

  submitBtn.classList.remove('d-block');
  submitBtn.classList.add('d-none');
  nextBtn.classList.remove('d-none');
  nextBtn.classList.add('d-block');
}
if (current_step == 0) {
    prevBtn.classList.remove('d-block');
    prevBtn.classList.add('d-none');
  }
progress((100 / stepCount) * current_step);

});
