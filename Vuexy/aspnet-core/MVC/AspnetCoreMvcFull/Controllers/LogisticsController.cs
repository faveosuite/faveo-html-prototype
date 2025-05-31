using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using AspnetCoreMvcFull.Models;

namespace AspnetCoreMvcFull.Controllers;

public class LogisticsController : Controller
{
  public IActionResult Dashboard() => View();
  public IActionResult Fleet() => View();
}
