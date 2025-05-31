using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using AspnetCoreMvcFull.Models;

namespace AspnetCoreMvcFull.Controllers;

public class ChartsController : Controller
{
  public IActionResult Apex() => View();
  public IActionResult Chartjs() => View();
}
