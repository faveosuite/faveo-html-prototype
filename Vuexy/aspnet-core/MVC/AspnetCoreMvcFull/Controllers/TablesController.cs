using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using AspnetCoreMvcFull.Models;

namespace AspnetCoreMvcFull.Controllers;

public class TablesController : Controller
{
  public IActionResult Basic() => View();
  public IActionResult DatatablesAdvanced() => View();
  public IActionResult DatatablesBasic() => View();
  public IActionResult DatatablesExtensions() => View();
}
