$( "#codeinput" ).validate({
  rules: {
  field: {
     required: true,
     digits: true,
     maxlength: 4
  }
}
});