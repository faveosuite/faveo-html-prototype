using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using AspnetCoreMvcFull.Models;

namespace AspnetCoreMvcFull.Controllers;

public class IconsController : Controller
{
  public IActionResult Tabler() => View();
  public IActionResult FontAwesome() => View();
}
