var collapseElementList = [].slice.call(document.getElementById("collapse"));
var collapseList = collapseElementList.map(function (collapseEl) {
  return new bootstrap.Collapse(collapseEl);
});
