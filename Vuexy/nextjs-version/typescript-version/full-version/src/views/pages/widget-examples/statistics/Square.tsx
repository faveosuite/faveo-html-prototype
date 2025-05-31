// MUI Imports
import Grid from '@mui/material/Grid2'

// Types Imports
import type { CardStatsSquareProps } from '@/types/pages/widgetTypes'

// Component Imports
import CardStatsSquare from '@components/card-statistics/CardStatsSquare'

const Square = ({ data }: { data: CardStatsSquareProps[] }) => {
  if (data) {
    return (
      <Grid container spacing={6}>
        {data.map((item, index) => (
          <Grid size={{ xs: 6 }} key={index}>
            <CardStatsSquare {...item} />
          </Grid>
        ))}
      </Grid>
    )
  }
}

export default Square
