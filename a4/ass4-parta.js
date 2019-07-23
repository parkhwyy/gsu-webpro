function getPaid() {
    var index = []
    var hours = []
    var pay = []

    var input = 0
    var count = 1
    var total = 0

    input = prompt("Enter the hours to generate a payroll report. \nEnter a negative number to exit.")
    if (input >= 0) { hours.push(input); index.push(count); count++;}
    else { alert("You entered a negative number!") }

    while (input >= 0) {
        input = prompt("Enter the hours to generate a payroll report. \nEnter a negative number to exit.")
        if (input >= 0) { hours.push(input); index.push(count); count++;}
    }

    for (h of hours) {
        if (h <= 40) { pay.push(h * 15) }
        else { pay.push(600 + (h-40) * 22.5) }
    }

    var i0 = document.getElementById('i0')
    i0.textContent = index[0]
    var h0 = document.getElementById('h0')
    h0.textContent = hours[0]
    var p0 = document.getElementById('p0')
    p0.textContent = pay[0]

    var i1 = document.getElementById('i1')
    i1.textContent = index[1]
    var h1 = document.getElementById('h1')
    h1.textContent = hours[1]
    var p1 = document.getElementById('p1')
    p1.textContent = pay[1]

    var i2 = document.getElementById('i2')
    i2.textContent = index[2]
    var h2 = document.getElementById('h2')
    h2.textContent = hours[2]
    var p2 = document.getElementById('p2')
    p2.textContent = pay[2]

    var i3 = document.getElementById('i3')
    i3.textContent = index[3]
    var h3 = document.getElementById('h3')
    h3.textContent = hours[3]
    var p3 = document.getElementById('p3')
    p3.textContent = pay[3]

    var i4 = document.getElementById('i4')
    i4.textContent = index[4]
    var h4 = document.getElementById('h4')
    h4.textContent = hours[4]
    var p4 = document.getElementById('p4')
    p4.textContent = pay[4]

    var i5 = document.getElementById('i5')
    i5.textContent = index[5]
    var h5 = document.getElementById('h5')
    h5.textContent = hours[5]
    var p5 = document.getElementById('p5')
    p5.textContent = pay[5]

    var i6 = document.getElementById('i6')
    i6.textContent = index[6]
    var h6 = document.getElementById('h6')
    h6.textContent = hours[6]
    var p6 = document.getElementById('p6')
    p6.textContent = pay[6]

    var i7 = document.getElementById('i7')
    i7.textContent = index[7]
    var h7 = document.getElementById('h7')
    h7.textContent = hours[7]
    var p7 = document.getElementById('p7')
    p7.textContent = pay[7]

    var i8 = document.getElementById('i8')
    i8.textContent = index[8]
    var h8 = document.getElementById('h8')
    h8.textContent = hours[8]
    var p8 = document.getElementById('p8')
    p8.textContent = pay[8]

    var i9 = document.getElementById('i9')
    i9.textContent = index[9]
    var h9 = document.getElementById('h9')
    h9.textContent = hours[9]
    var p9 = document.getElementById('p9')
    p9.textContent = pay[9]

    for (var i = 0; i < pay.length; i++) {
        total = total + pay[i];
    }

    var totalval = document.getElementById('totalval')
    totalval.innerHTML = total
}