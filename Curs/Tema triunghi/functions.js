function verify()
{
  var a, b, c;
  a = parseInt(document.getElementById("first").value);
  b = parseInt(document.getElementById("second").value);
  c = parseInt(document.getElementById("third").value);
  if(a>0 && b>0 && c>0 && (a+b)>c && (a+c)>b && (c+b)>a)
  {
    document.getElementById("verify_text").innerHTML = "The edges form a triangle";
    document.getElementById("calculate_area").disabled = false;
    document.getElementById("calculate_per").disabled = false;
    document.getElementById("calculate_cos").disabled = false;
    document.getElementById("draw_triangle").disabled = false;
  }
  else
  {
    document.getElementById("verify_text").innerHTML = "The edges don't form a triangle";
    document.getElementById("calculate_area").disabled = true;
    document.getElementById("calculate_per").disabled = true;
    document.getElementById("calculate_cos").disabled = true;
    document.getElementById("draw_triangle").disabled = true;
  }
}
function calculate_area()
{
  var a, b, c;
  a = parseInt(document.getElementById("first").value);
  b = parseInt(document.getElementById("second").value);
  c = parseInt(document.getElementById("third").value);

  var s = (a + b + c) / 2;

  var areaValue = Math.sqrt(s * (s - a) * (s - b) * (s - c));
  document.getElementById("calculate_area_text").innerHTML = areaValue.toFixed(2);
}

function calculate_per()
{
  var a, b, c;
  a = parseInt(document.getElementById("first").value);
  b = parseInt(document.getElementById("second").value);
  c = parseInt(document.getElementById("third").value);

  var s = a + b + c;

  document.getElementById("calculate_per_text").innerHTML = s;
}

function calculate_cos()
{
  var a, b, c;
  a = parseInt(document.getElementById("first").value);
  b = parseInt(document.getElementById("second").value);
  c = parseInt(document.getElementById("third").value);

  var s = a + b + c;

  var cos_a, cos_b, cos_c;
  cos_a = ((b * b) + (c * c) - (a * a)) / (2 * b * c);
  cos_b = ((a * a) + (c * c) - (b * b)) / (2 * a * c);
  cos_c = ((a * a) + (b * b) - (c * c)) / (2 * a * b);

  document.getElementById("calculate_cos_a").innerHTML = "cos A = " + cos_a;
  document.getElementById("calculate_cos_b").innerHTML = "cos B = " + cos_b;
  document.getElementById("calculate_cos_c").innerHTML = "cos C = " + cos_c;
}

function draw_triangle()
{
  var a, b, c;
  a = parseInt(document.getElementById("first").value);
  b = parseInt(document.getElementById("second").value);
  c = parseInt(document.getElementById("third").value);

  a = a*25;
  b = b*25;
  c = c*25;

  var A = [0, 0];
  var B = [0, a];
  var C = [];

  C[1] = (a * a + c * c - b * b) / (2 * a);
  C[0] = Math.sqrt(c * c - C[1] * C[1]);

  var canvas = document.getElementById("canvas");
  var ctx = canvas.getContext('2d');
  ctx.beginPath();
  ctx.moveTo(A[0], A[1]);
  ctx.lineTo(B[0], B[1]);
  ctx.lineTo(C[0], C[1]);
  ctx.fill();
}

function clear_triangle()
{
  const context = canvas.getContext('2d');
  context.clearRect(0, 0, canvas.width, canvas.height);
}
