const express = require('express')
const mysql = require('mysql')

const app = express()
app.use(express.json())

const connection = mysql.createConnection({
  host: 'mysql-container',
  user: 'root',
  password: 'admin',
  database: 'TEST',
})

connection.connect()

app.get('/products', (req, res) => {
  connection.query('SELECT * FROM products', (error, results) => {
    if (error) throw error

    res.json(results.map((item) => ({ name: item.name, price: item.price })))
  })
})

app.get('/', (req, res) => {
  res.send('HI GAL')
})

app.listen(3000, console.log('server running on port 3000'))
