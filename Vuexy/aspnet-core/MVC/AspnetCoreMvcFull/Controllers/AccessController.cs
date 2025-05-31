using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using AspnetCoreMvcFull.Models;

namespace AspnetCoreMvcFull.Controllers;

public class AccessController : Controller
{
public IActionResult Permission() => View();
public IActionResult Roles() => View();
}
