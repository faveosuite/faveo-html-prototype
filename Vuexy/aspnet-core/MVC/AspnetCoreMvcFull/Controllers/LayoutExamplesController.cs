using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using AspnetCoreMvcFull.Models;

namespace AspnetCoreMvcFull.Controllers;

public class LayoutExamplesController : Controller
{
  public IActionResult Blank() => View();
  public IActionResult CollapsedMenu() => View();
  public IActionResult Container() => View();
  public IActionResult ContentNavbar() => View();
  public IActionResult ContentNavbarWithSidebar() => View();
  public IActionResult Fluid() => View();
  public IActionResult HorizontalMenu() => View();
  public IActionResult VerticalMenu() => View();
  public IActionResult NavbarFull() => View();
  public IActionResult NavbarFullWithSidebar() => View();
  public IActionResult WithoutMenu() => View();
  public IActionResult WithoutNavbar() => View();
}
