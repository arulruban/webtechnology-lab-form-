
// to validate phone number
function phonenovalidate(inputElement) {
  var inputValue = inputElement.value;
  number=inputValue;
  if (number.length === 10) { 
    inputElement.style.color = "black"; 
  } else {
    inputElement.style.color = "red"; 
  }
}

// to convert lowercase text to uppercase
function convertToUppercase(inputElement)
{
  inputElement.value = inputElement.value.toUpperCase();
}

//validate email

function emailvalidate(inputElement)
{
  var inputValue = inputElement.value;
  email=inputValue;
  const pattern=/^[a-zA-Z0-9.%+-]+@[a-zA-Z0-9.-]+\.(edu|com|net|org|in|)$/;
  if (pattern.test(email)) {
    inputElement.style.color = ''; 
  } else {
    inputElement.style.color = "red"; 
  }

}