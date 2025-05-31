using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.Rendering;
using Microsoft.EntityFrameworkCore;
using AspnetCoreMvcFull.Models;
using AspnetCoreMvcFull.Data;
using Newtonsoft.Json;

namespace AspnetCoreMvcFull.Controllers
{
    public class TransactionsController : Controller
    {
        private readonly AspnetCoreMvcFullContext _context;

        public TransactionsController(AspnetCoreMvcFullContext context)
        {
            _context = context;
        }

        // Replace default error messages with custom messages
        private void ReplaceErrorMessage(string propertyName, string customErrorMessage)
        {
            if (ModelState.TryGetValue(propertyName, out var entry))
            {
                if (entry.Errors.Any(e => e.ErrorMessage == "The value '' is invalid."))
                {
                    entry.Errors.Clear();
                    entry.Errors.Add(customErrorMessage);
                }
            }
        }

        // Set success toast message
        private void SetSuccessToast(string message, string cssClass)
        {
            // Add success toast message for the current operation
            TempData["TransactionsToast"] = JsonConvert.SerializeObject(new List<TransactionsToast>
            {
                new TransactionsToast
                {
                    Message = message,
                    CssClass = cssClass
                }
            });
        }

        // GET: Transactions
        public async Task<IActionResult> Index()
        {
          // Calculate total transactions
          int totalTransactions = await _context.Transactions.CountAsync();
          var transactions = await _context.Transactions.ToListAsync();
          var totalPaidTransactions = transactions
            .Where(t => t.Status?.ToLower() == "paid")
            .Sum(t => t.Total);

          var totalDueTransactions = transactions
            .Where(t => t.Status?.ToLower() == "due")
            .Sum(t => t.Total);

          var totalCanceledTransactions = transactions
            .Where(t => t.Status?.ToLower() == "canceled")
            .Sum(t => t.Total);

          // Pass these counts to the view or perform further operations
          ViewData["TotalTransactions"] = totalTransactions;
          ViewData["TotalPaidTransactions"] = totalPaidTransactions;
          ViewData["TotalDueTransactions"] = totalDueTransactions;
          ViewData["TotalCanceledTransactions"] = totalCanceledTransactions;

          return View(await _context.Transactions.ToListAsync());
        }

        // GET: Transactions/Add
        public IActionResult Add()
        {
            return View();
        }

        // POST: Transactions/Add
        // To protect from overposting attacks, enable the specific properties you want to bind to.
        // For more details, see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Add([Bind("Id,Customer,TransactionDate,DueDate,Total,Status")] Transactions transactions)
        {
          if (ModelState.IsValid)
          {
              _context.Add(transactions);
              await _context.SaveChangesAsync();
              // Add success toast message for adding
              SetSuccessToast("Added successfully", "bg-success");
              TempData["DisplayToast"] = true;
              return RedirectToAction(nameof(Index));
          }
          // Replace default error messages
          ReplaceErrorMessage("TransactionDate", "Enter a valid Transaction Date");
          ReplaceErrorMessage("DueDate", "Enter a valid Due Date");
          ReplaceErrorMessage("Total", "Enter Total as a currency value");
          return View(transactions);
        }

        // GET: Transactions/Update/5
        public async Task<IActionResult> Update(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var transactions = await _context.Transactions.FindAsync(id);
            if (transactions == null)
            {
                return NotFound();
            }
            return View(transactions);
        }

        // POST: Transactions/Update/5
        // To protect from overposting attacks, enable the specific properties you want to bind to.
        // For more details, see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Update(int id, [Bind("Id,Customer,TransactionDate,DueDate,Total,Status")] Transactions transactions)
        {
          if (id != transactions.Id)
          {
            return NotFound();
          }
          // Set default dates to Today
          if (transactions.TransactionDate == DateTime.MinValue)
          {
            transactions.TransactionDate = DateTime.Today;
            ModelState.Remove("TransactionDate"); // Clear existing errors
          }

          // Set default dates to Tomorrow
          if (transactions.DueDate == DateTime.MinValue)
          {
            transactions.DueDate = DateTime.Today.AddDays(1);
            ModelState.Remove("DueDate"); // Clear existing errors
          }

          // Revalidate dates
          if (transactions.DueDate <= transactions.TransactionDate)
          {
            ModelState.AddModelError("DueDate", "Due Date must be later than Transaction Date.");
          }

            if (ModelState.IsValid)
            {
                try
                {
                    _context.Update(transactions);
                    await _context.SaveChangesAsync();

                    // Add success toast message for updating
                    SetSuccessToast("Updated successfully", "bg-info");
                    TempData["DisplayToast"] = true;
                }
                catch (DbUpdateConcurrencyException)
                {
                    if (!TransactionsExists(transactions.Id))
                    {
                        return NotFound();
                    }
                    else
                    {
                        throw;
                    }
                }
                return RedirectToAction(nameof(Index));
            }
            // Replace default error messages
            ReplaceErrorMessage("TransactionDate", "Enter a valid Transaction Date");
            ReplaceErrorMessage("DueDate", "Enter a valid Due Date");
            ReplaceErrorMessage("Total", "Enter Total as a currency value");
            return View(transactions);
        }

        // GET: Transactions/Delete/5
        public async Task<IActionResult> Delete(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var transactions = await _context.Transactions
                .FirstOrDefaultAsync(m => m.Id == id);
            if (transactions == null)
            {
                return NotFound();
            }
            else
            {
               _context.Transactions.Remove(transactions);
                await _context.SaveChangesAsync();

                // Add success toast message for deleting
                SetSuccessToast("Deleted successfully", "bg-danger");
                TempData["DisplayToast"] = true;
            }
            await _context.SaveChangesAsync();
            return RedirectToAction(nameof(Index));
        }

        private bool TransactionsExists(int id)
        {
            return _context.Transactions.Any(e => e.Id == id);
        }
    }
}
