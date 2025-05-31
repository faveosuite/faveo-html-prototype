// MUI Imports
import Grid from '@mui/material/Grid2'

// Types Imports
import type { CardStatsVerticalProps } from '@/types/pages/widgetTypes'

// Component Imports
import CardStatVertical from '@/components/card-statistics/Vertical'

const Vertical = ({ data }: { data: CardStatsVerticalProps[] }) => {
  if (data) {
    return (
      <Grid container spacing={6}>
        {data.map((item, index) => (
          <Grid size={{ xs: 6 }} key={index}>
            <CardStatVertical {...item} />
          </Grid>
        ))}
      </Grid>
    )
  }
}

export default Vertical
