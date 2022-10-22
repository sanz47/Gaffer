import React from 'react'
import './login.css'
import logo from '../field.png'

export default function Login() {
  return (
    <>
    
  
  
   <div>
        <meta charSet="UTF-8" />
        <title>Gaffer</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossOrigin="anonymous" /><link rel="stylesheet" href="./login_style.css" />
        <div className="box-form">
          <div className="left">
            <div className="overlay">
              <h1>Gaffer</h1>
              <p /><h3>&nbsp;&nbsp;&nbsp;Football Management System</h3><p />
              <span>
                <span className="socialgg">
                  <p>login with social media</p>
                  
                  <a href="www.google.com"><i className="fa fa-twitter" aria-hidden="true" /> </a>
                </span>
              </span>
            </div>
          </div>
          <div className="right">

            <h5>Login</h5>
            <div className="inputs">
              <input type="text" id="username" placeholder="Username" />
              <br />
              <input type="password" id="password" placeholder="Password" />
            </div>
            <br/>
            <div className="remember-me--forget-password">
              {/* Angular */}
              {/*hello world*/}
              <p><a href="www.google.com">Forgot Password?</a></p>
            </div>
            <br /><br /><br /><br />
            <input type="button" defaultValue="Login" id="submit" onclick="validate()" />
            <p>Don't have an account? <a href="/Users/sanz/Documents/Code/Project/Signup.html">Create Your Account</a></p>
          </div>
        </div>
        {/* partial */}
      </div>

  
  
   </>
  )
}
