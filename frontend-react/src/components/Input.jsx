import React from 'react'
import "../styles/Input.css"
export const Input = ({type, placeholder, className, setValue}) => {
  return (
    <input type={type} placeholder={placeholder} className={className} onChange={(e) =>{setValue(e.target.value);console.log("la hora es", e.target.value)}}/>
  )
}
