using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using AspnetCoreMvcFull.Models;

namespace AspnetCoreMvcFull.Controllers;

public class FormWizardController : Controller
{
public IActionResult Icons() => View();
public IActionResult Numbered() => View();
}
