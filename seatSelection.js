selectedSeats = [];
function updateSelectedSeat(id) {
  var classSelected = document.getElementById(id)
  // console.log(classSelected);
  if (classSelected.classList.contains('avail')) {
    if (classSelected.classList.contains('selected')) {
     classSelected.classList.remove('selected'); 
      const index = selectedSeats.indexOf(id);
      if (index > -1) {
        selectedSeats.splice(index, 1);
      }
    } 
    else {
      classSelected.classList.add('selected');
      selectedSeats.push(id);    
    }
  }

  price = selectedSeats.length * 17;
  document.getElementById("count").value=selectedSeats;
  // document.getElementById("priceToPay").value=price;
}
