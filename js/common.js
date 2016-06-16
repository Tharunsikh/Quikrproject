var Circle = function(x, y, r) {
      this.x = x;
      this.y = y;
      this.r = r;
}

$.extend(Circle.prototype, {
      area: function() {
            return Math.PI * this.r * this.r;
      },
      diameter: function() {
            return 2 * this.r;
      }
});

var mycircle = new Circle(100, 200, 50);
alert(mycircle.r + ' -> ' + mycircle.area());
