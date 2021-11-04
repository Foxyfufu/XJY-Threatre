selectedSeats = [];
function updateSelectedSeat(id) {

  var classSelected = document.getElementById(id).classList
  console.log(classSelected);
  if (classSelected == 'seat') {
    document.getElementById(id).classList.add('selected');
    selectedSeats.push(id)    
  }
  else {
    document.getElementById(id).classList.remove('selected'); 
    const index = selectedSeats.indexOf(id);
    if (index > -1) {
      selectedSeats.splice(index, 1);
    }
  }

  price = selectedSeats.length * 17
  document.getElementById("count").value=selectedSeats;
  document.getElementById("priceToPay").value=price;
}
