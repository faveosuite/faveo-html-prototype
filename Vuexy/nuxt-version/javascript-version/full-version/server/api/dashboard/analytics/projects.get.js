import { db } from '@/server/fake-db/dashboard/index'
import is from '@sindresorhus/is'
import { destr } from 'destr'

export default defineEventHandler(async event => {
  const { q, sortBy = '', page = 1, itemsPerPage = 10, orderBy } = getQuery(event)
  const searchQuery = is.string(q) ? q : undefined
  const queryLower = (searchQuery ?? '').toString().toLowerCase()
  const parsedSortBy = destr(sortBy)
  const sortByLocal = is.string(parsedSortBy) ? parsedSortBy : ''
  const parsedOrderBy = destr(orderBy)
  const orderByLocal = is.string(parsedOrderBy) ? parsedOrderBy : ''
  const parsedItemsPerPage = destr(itemsPerPage)
  const parsedPage = destr(page)
  const itemsPerPageLocal = is.number(parsedItemsPerPage) ? parsedItemsPerPage : 10
  const pageLocal = is.number(parsedPage) ? parsedPage : 1
  let filteredProjects = db.analytics.filter(project => ((project.name.toLowerCase().includes(queryLower) || project.leader.toLowerCase().includes(queryLower)) || project.project.toLowerCase().includes(queryLower))).reverse()
  if (sortByLocal) {
    console.log(sortByLocal)
    if (sortByLocal === 'project') {
      filteredProjects = filteredProjects.sort((a, b) => {
        if (orderByLocal === 'asc')
          return a.name.localeCompare(b.name)
        else
          return b.name.localeCompare(a.name)
      })
    }
    if (sortByLocal === 'leader') {
      filteredProjects = filteredProjects.sort((a, b) => {
        if (orderByLocal === 'asc')
          return a.leader.localeCompare(b.leader)
        else
          return b.leader.localeCompare(a.leader)
      })
    }
    if (sortByLocal === 'progress') {
      filteredProjects = filteredProjects.sort((a, b) => {
        if (orderByLocal === 'asc')
          return a.progress - b.progress
        else
          return b.progress - a.progress
      })
    }
  }
  const totalProjects = filteredProjects.length
  const totalPages = Math.ceil(totalProjects / itemsPerPageLocal)
  
  return {
    projects: paginateArray(filteredProjects, itemsPerPageLocal, pageLocal),
    totalPages,
    totalProjects,
    page: pageLocal > Math.ceil(totalProjects / itemsPerPageLocal) ? 1 : page,
  }
})
