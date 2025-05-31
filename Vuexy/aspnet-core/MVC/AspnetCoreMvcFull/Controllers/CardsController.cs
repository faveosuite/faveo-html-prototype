using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using AspnetCoreMvcFull.Models;

namespace AspnetCoreMvcFull.Controllers;

public class CardsController : Controller
{
  public IActionResult Basic() => View();
  public IActionResult Advance() => View();
  public IActionResult Statistics() => View();
  public IActionResult Analytics() => View();
  public IActionResult Actions() => View();
  public IActionResult Gamifications() => View();
}
