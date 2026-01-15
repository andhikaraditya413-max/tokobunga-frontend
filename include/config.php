<?php
fetch("http://localhost:8000/api/products.php")
  .then(res => res.json())
  .then(data => console.log(data));