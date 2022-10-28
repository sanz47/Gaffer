const express = require("express");
const dotenv = require("dotenv");
const cookieParser = require("cookie-parser");
const db = require("./config/dbConfig");

const {register, login} = require("./middlewares/auth/auth");
const {bypassCORS} = require("./middlewares/setup");

const app = express();
dotenv.config();

// internal imports
const {notFoundHandler, errorHandler} = require("./middlewares/common/errorHandler");
const { Router } = require("express");
const { getPackages } = require("./middlewares/packages/FetchPackages");
const { getPins } = require("./middlewares/packages/FetchPins");
const { getCities } = require("./middlewares/cities/FetchCities");

// request parsers
app.use(express.urlencoded({extended: true}));
app.use(express.json());

//parse Cookies
app.use(cookieParser(process.env.COOKIE_SECRET));


//routing setup

app.post("/register",bypassCORS, register);
app.post("/login",bypassCORS, login);
app.get("/fetchAllPackages", bypassCORS, getPackages);
app.post("/pins",bypassCORS, getPins);
app.get("/cities",bypassCORS, getCities);

// error handling 

// 404 error handler
app.use(notFoundHandler);
// common error handler
app.use(errorHandler);

app.listen(3000, , () => {
    console.log(`App listening on PORT ${3000}`);
});