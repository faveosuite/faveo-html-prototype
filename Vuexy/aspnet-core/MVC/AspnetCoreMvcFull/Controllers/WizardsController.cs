using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using AspnetCoreMvcFull.Models;

namespace AspnetCoreMvcFull.Controllers;

public class WizardsController : Controller
{
  public IActionResult Checkout() => View();
  public IActionResult CreateDeal() => View();
  public IActionResult PropertyListing() => View();
}
