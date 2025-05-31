using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using AspnetCoreMvcFull.Models;

namespace AspnetCoreMvcFull.Controllers;

public class AcademyController : Controller
{
  public IActionResult Dashboard() => View();
  public IActionResult MyCourse() => View();
  public IActionResult CourseDetails() => View();
}
