function kolla(u,p)
{
  if (kollaField(u))
    {
      if (kollaField(p))
      {
        alert("username och PAssowrd är OK")
        return true;

      }
      else {
        return false;
      }

    }
    else {
      return false;
    }

}


function kollaField(f)
{
  f=f.trim();
  if ( (f.length == 0) || (f== "") ) {
          return false; }
        else {
          if ( f.length > 15 ) {
            alert("För långt användarnamn eller lösenord\nhögst 15 tecken är tillåtet.\nDu har använt "+f.length+" tecken.")
            return false;
          }
            return true;
        }



}
