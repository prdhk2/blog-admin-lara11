$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })

  // Get the container element
const marqueeContainer = document.getElementById('marqueeContainer');

  // Clone the children elements and append them to the end
const children = marqueeContainer.children;
const clone = Array.from(children).map(child => child.cloneNode(true));
clone.forEach(item => marqueeContainer.appendChild(item));

  // Set the animation duration based on the number of items
const duration = 25 * children.length + 's';
  marqueeContainer.style.animationDuration = duration;