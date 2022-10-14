const { Client } = require('pg')
const client = new Client({
  user: 'postgres',
  host: 'containers-us-west-28.railway.app',
  database: 'railway',
  password: 'ssxHkalpuDlPHt3valTV',
  port: 6311,
})
client.connect();
client.query('select * from mytab',(err,res)=>{
  if(!err){
    console.log(res.rows);
    const row = res.rows[0];
    document.getElementById("demo").innerHTML = "id:"+rows.id;
  }
  else{
    console.log("Error occured: "+err.message);
  }
  client.end;
})