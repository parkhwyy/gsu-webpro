// alert("This is my first script")

console.log("This is equivalent to print")
console.error("Error")
console.warn("Warning")

// Variables
var x = 10
console.log("var is", x)

let y = 10
console.log("let is", y)

const z = 30
console.log("constant is", z)

// Data Types
const name = "Jay"
const age = 26
const rating = 4.5
const null_ = null
const undefined_ = undefined

console.log(typeof name)

// String Functions
console.log("My name is: " + name)
console.log(`--- My name is: ${name} ${rating}`)

console.log(name.length)
console.log(name.toUpperCase())
console.log(name.toLowerCase())
console.log(name.substring(0,2))

// Arrays
const array = [1,2,3,4,5]
console.log(array[1]) // Access an element of the array

array.push(21)
console.log("Array is", array)

array.unshift(33)
console.log("Start of the array is", array)

array.pop() // Remove the last element in the array
console.log("Array is", array)

// Objects
const person = {
    firstname: 'Jay',
    hobbies: ['none', '1', '2'],
    address: {
        street: 'Lindbergh',
        zip: 30324,
        address2: {
            zip2: 0002
        }
    }
}
console.log("A person is", person)
console.log(person.firstname)
console.log(person.address.street)
console.log(person.address.address2.zip2)

console.log(JSON.stringify(person))

// Loops
for (var i = 0; i < 10; i++) {
    console.log("index is", i)
}

let j = 0
while (j < 10) {
    j++;
    console.log("Executing the while loop")
}

let todo = [1, 2, "j", "k"]
for (let index = 0; index < todo.length; index++) {
    const element = todo[index];
    console.log("element is", element)
}

const todo_filter = todo.filter (
    function todo(val) {
        return val == '1' // Filters only 1
    }
)
console.log ("todo filter is", todo_filter)

// Constructor Function
function create_user(firstname, lastname, dob) {
    this.firstname = firstname
    this.lastname = lastname
    this.dob = new Date(dob)
}

const user1 = new create_user("Jay", "M", "12-12-2019")
const user2 = new create_user("User2", "L", "12-12-2020")
console.log("User 1 is", user1)
console.log("User 2 is", user2.dob.getFullYear())