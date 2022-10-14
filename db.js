const { Client } = require('pg')
const client = new Client({
  user: 'postgres',
  host: 'containers-us-west-28.railway.app',
  database: 'railway',
  password: 'ssxHkalpuDlPHt3valTV',
  port: 6311,
})
client.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});