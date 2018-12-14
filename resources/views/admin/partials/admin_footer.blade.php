<footer class="footer">
  <div class="container-fluid">
    <nav class="float-left">
      <ul>
        <li>
          <a href="#">
            DriveSafe
          </a>
        </li>
        <li>
          <a href="#">
            About Us
          </a>
        </li>
        <li>
          <a href="#">
            Blog
          </a>
        </li>
        
      </ul>
    </nav>
    <div class="copyright float-right" id="date">
      <i>Developed By</i> by
      <a>Lu_team_Descifrador</a>
    </div>
  </div>
</footer>
<script>
  const x = new Date().getFullYear();
  let date = document.getElementById('date');
  date.innerHTML = '&copy; ' + x + date.innerHTML;
</script>
