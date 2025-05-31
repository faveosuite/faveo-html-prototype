// MUI Imports
import type { ChipProps } from '@mui/material/Chip'

// Third-party Imports
import type { ApexOptions } from 'apexcharts'

// Type Imports
import type { ThemeColor } from '@core/types'
import type { CustomAvatarProps } from '@core/components/mui/Avatar'

export type CardStatsHorizontalWithAvatarProps = {
  stats: string
  title: string
  avatarIcon: string
  avatarColor?: ThemeColor
  avatarVariant?: CustomAvatarProps['variant']
  avatarSkin?: CustomAvatarProps['skin']
  avatarSize?: number
}

export type CardStatsHorizontalWithBorderProps = {
  title: string
  stats: number
  trendNumber: number
  avatarIcon: string
  color?: ThemeColor
}

export type CardStatsCustomerStatsProps = {
  title: string
  avatarIcon: string
  color?: ThemeColor
  description: string
} & (
  | {
      stats?: string
      content?: string
      chipLabel?: never
    }
  | {
      chipLabel?: string
      stats?: never
      content?: never
    }
)

export type CardStatsSquareProps = {
  avatarIcon: string
  avatarColor?: ThemeColor
  avatarSize?: number
  avatarVariant?: CustomAvatarProps['variant']
  avatarSkin?: CustomAvatarProps['skin']
  stats: string
  statsTitle: string
}

export type CardStatsHorizontalProps = {
  title: string
  stats: string
  avatarIcon: string
  avatarColor?: ThemeColor
  avatarSize?: number
  avatarSkin?: CustomAvatarProps['skin']
}

export type CardStatsVerticalProps = {
  title: string
  subtitle: string
  stats: string
  avatarIcon: string
  avatarSize?: number
  avatarSkin?: CustomAvatarProps['skin']
  avatarColor?: ThemeColor
  chipText: string
  chipColor?: ThemeColor
  chipVariant?: ChipProps['variant']
}

export type CardStatsWithAreaChartProps = {
  stats: string
  title: string
  chartColor?: ThemeColor
  chartSeries: ApexOptions['series']
  avatarIcon: string
  avatarSize?: number
  avatarColor?: ThemeColor
  avatarSkin?: CustomAvatarProps['skin']
}

export type CardStatsType = {
  statsHorizontalWithAvatar: CardStatsHorizontalWithAvatarProps[]
  statsHorizontalWithBorder: CardStatsHorizontalWithBorderProps[]
  customerStats: CardStatsCustomerStatsProps[]
  statsSquare: CardStatsSquareProps[]
  statsHorizontal: CardStatsHorizontalProps[]
  statsVertical: CardStatsVerticalProps[]
  statsWithAreaChart: CardStatsWithAreaChartProps[]
}
