const emailValidation = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
const msgId = "msg-";

function validadeInput(input) {}
function validadeForm(event) {
  let errorcount = 0;
  const form = event.target;
  const inputs = form.querySelectorAll(".input");

  inputs.forEach((input) => {
    let id = input.id;
    let value = input.value;
    let msg = form.getElementById(msgId + id);
    errorcount += validadeInput(input);
  });
}
