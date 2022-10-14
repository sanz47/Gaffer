const { Client } = require('pg')
const client = new Client({
  user: 'postgres',
  host: 'containers-us-west-28.railway.app',
  database: 'railway',
  password: 'ssxHkalpuDlPHt3valTV',
  port: 6311,
})
client.connect();
client.query('SELECT * FROM PLAYER',(err,res)=>{
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

client.query('UPDATE player SET player_age = (CURRENT_DATE - player_dob)/365',(err,res)=>{
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


client.query('UPDATE player SET player_fit = 'Available',  player_recovery_time = 0 WHERE ( (CURRENT_DATE - player_injury_date)/30 >= player_recovery_time) ',(err,res)=>{
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


client.query('UPDATE player SET player_recovery_time = (CURRENT_DATE - player_injury_date)/30 WHERE player_fit = 'Injured',(err,res)=>{
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

client.query('INSERT INTO MATCH (match_ID,match_date, match_opponent, match_venue, match_update) VALUES (1,TO_DATE('16/10/2022', 'DD/MM/YYYY'), 'IMPULSE FC', 'Home', 0)',(err,res)=>{
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

client.query('INSERT INTO MATCH (match_ID,match_date, match_opponent, match_venue, match_update) VALUES (2,TO_DATE('5/10/2022', 'DD/MM/YYYY'), 'Arsenal FC', 'Away', 0)',(err,res)=>{
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

