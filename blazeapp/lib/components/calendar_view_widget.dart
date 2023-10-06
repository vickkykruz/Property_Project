import '/flutter_flow/flutter_flow_calendar.dart';
import '/flutter_flow/flutter_flow_theme.dart';
import '/flutter_flow/flutter_flow_util.dart';
import '/flutter_flow/flutter_flow_widgets.dart';
import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:provider/provider.dart';
import 'calendar_view_model.dart';
export 'calendar_view_model.dart';

class CalendarViewWidget extends StatefulWidget {
  const CalendarViewWidget({
    Key? key,
    required this.startDate,
  }) : super(key: key);

  final bool? startDate;

  @override
  _CalendarViewWidgetState createState() => _CalendarViewWidgetState();
}

class _CalendarViewWidgetState extends State<CalendarViewWidget> {
  late CalendarViewModel _model;

  @override
  void setState(VoidCallback callback) {
    super.setState(callback);
    _model.onUpdate();
  }

  @override
  void initState() {
    super.initState();
    _model = createModel(context, () => CalendarViewModel());
  }

  @override
  void dispose() {
    _model.maybeDispose();

    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    context.watch<FFAppState>();

    return Container(
      decoration: BoxDecoration(
        color: FlutterFlowTheme.of(context).secondaryBackground,
      ),
      child: Column(
        mainAxisSize: MainAxisSize.min,
        children: [
          FlutterFlowCalendar(
            color: FlutterFlowTheme.of(context).primary,
            iconColor: FlutterFlowTheme.of(context).secondaryText,
            weekFormat: false,
            weekStartsMonday: true,
            rowHeight: 64.0,
            onChange: (DateTimeRange? newSelectedDate) async {
              _model.calendarSelectedDay = newSelectedDate;
              if (widget.startDate!) {
                FFAppState().update(() {
                  FFAppState().startDate = _model.calendarSelectedDay?.start;
                });
              } else {
                FFAppState().update(() {
                  FFAppState().endDate = _model.calendarSelectedDay?.start;
                });
              }

              setState(() {});
            },
            titleStyle: FlutterFlowTheme.of(context).headlineSmall,
            dayOfWeekStyle: FlutterFlowTheme.of(context).labelLarge,
            dateStyle: FlutterFlowTheme.of(context).bodyMedium,
            selectedDateStyle: FlutterFlowTheme.of(context).titleSmall,
            inactiveDateStyle: FlutterFlowTheme.of(context).labelMedium,
          ),
          Padding(
            padding: EdgeInsetsDirectional.fromSTEB(0.0, 20.0, 0.0, 20.0),
            child: FFButtonWidget(
              onPressed: () async {
                Navigator.pop(context);
              },
              text: 'CLOSE',
              options: FFButtonOptions(
                width: 150.0,
                height: 40.0,
                padding: EdgeInsetsDirectional.fromSTEB(0.0, 0.0, 0.0, 0.0),
                iconPadding: EdgeInsetsDirectional.fromSTEB(0.0, 0.0, 0.0, 0.0),
                color: FlutterFlowTheme.of(context).primary,
                textStyle: FlutterFlowTheme.of(context).titleSmall.override(
                      fontFamily: 'Readex Pro',
                      color: Colors.white,
                      fontSize: 18.0,
                    ),
                elevation: 3.0,
                borderSide: BorderSide(
                  color: Colors.transparent,
                  width: 1.0,
                ),
                borderRadius: BorderRadius.circular(8.0),
              ),
            ),
          ),
        ],
      ),
    );
  }
}
